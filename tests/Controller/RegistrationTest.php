<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class RegistrationControllerTest extends WebTestCase
{
    public function testSubmitRegistrationForm()
    {
        $client = static::createClient();

        // Récupère le crawler après avoir visité la page d'inscription
        $crawler = $client->request('GET', '/register');

        // Sélectionne le formulaire en utilisant le texte du bouton de soumission, par exemple "S'inscrire"
        $buttonCrawlerNode = $crawler->selectButton("S'inscrire");

        // Récupère le formulaire et définis les valeurs des champs
        $form = $buttonCrawlerNode->form([
            'registration_form[surname]' => 'Doe',
            'registration_form[name]' => 'John',
            'registration_form[address]' => '123 Main Street',
            'registration_form[city]' => 'Anytown',
            'registration_form[country]' => 'Countryland',
            'registration_form[aboutUs]' => 'internet',
            'registration_form[email]' => 'doe97@example.com',
            'registration_form[plainPassword][first]' => 'Password-1997',
            'registration_form[plainPassword][second]' => 'Password-1997',
            // Assurez-vous que les noms des champs correspondent exactement à ceux générés dans votre formulaire Symfony
        ]);

        // Cochez les cases si nécessaire, exemple pour la newsletter
        $form['registration_form[agreeTerms]']->tick();
        $form['registration_form[newsletter]']->tick();

        // Soumet le formulaire
        $client->submit($form);

        // Vérifiez que la réponse est un succès ou que vous êtes redirigé vers une autre page, comme la page de connexion
        $this->assertResponseRedirects('/login');

        // Suivez la redirection et vérifiez que la page de connexion s'affiche
        $crawler = $client->followRedirect();
        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', 'Se connecter :');
    }
}
