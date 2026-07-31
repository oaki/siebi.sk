<?php

namespace Tests\Feature;

use App\Mail\ContactSubmitted;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class ContactFormTest extends TestCase
{
    use RefreshDatabase;

    public function test_valid_submission_sends_mail_and_redirects_with_success(): void
    {
        Mail::fake();

        $response = $this->from('/sk/kontakt')->post('/kontakt-formular', [
            'locale' => 'sk',
            'name' => 'Ján Testovací',
            'company' => 'Test s.r.o.',
            'email' => 'jan@example.com',
            'phone' => '+421900111222',
            'message' => 'Potrebujem ADR nálepky na 20 sudov, nerez.',
        ]);

        $response->assertRedirect('/sk/kontakt');
        $response->assertSessionHas('contact_sent', true);

        Mail::assertSent(ContactSubmitted::class, function (ContactSubmitted $mail) {
            return $mail->data['email'] === 'jan@example.com'
                && $mail->siteLocale === 'sk';
        });
    }

    public function test_missing_required_fields_fail_validation_and_send_no_mail(): void
    {
        Mail::fake();

        $response = $this->from('/sk/kontakt')->post('/kontakt-formular', [
            'locale' => 'sk',
        ]);

        $response->assertRedirect('/sk/kontakt');
        $response->assertSessionHasErrors(['name', 'email', 'message']);

        Mail::assertNothingSent();
    }

    public function test_invalid_email_fails_validation(): void
    {
        $response = $this->from('/sk/kontakt')->post('/kontakt-formular', [
            'locale' => 'sk',
            'name' => 'Ján',
            'email' => 'not-an-email',
            'message' => 'Test',
        ]);

        $response->assertSessionHasErrors(['email']);
    }

    public function test_honeypot_silently_blocks_bots_without_sending_mail(): void
    {
        Mail::fake();

        $response = $this->from('/sk/kontakt')->post('/kontakt-formular', [
            'locale' => 'sk',
            'website' => 'https://spam.example.com',
            'name' => 'Bot',
            'email' => 'bot@example.com',
            'message' => 'spam',
        ]);

        // Bots get the same "success" response as real visitors — no signal
        // that they were caught.
        $response->assertRedirect('/sk/kontakt');
        $response->assertSessionHas('contact_sent', true);

        Mail::assertNothingSent();
    }

    public function test_submission_redirects_to_the_correct_locale(): void
    {
        Mail::fake();

        $response = $this->from('/de/kontakt')->post('/kontakt-formular', [
            'locale' => 'de',
            'name' => 'Hans Test',
            'email' => 'hans@example.com',
            'message' => 'Testnachricht',
        ]);

        $response->assertRedirect('/de/kontakt');
    }
}
