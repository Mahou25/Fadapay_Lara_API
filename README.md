<<<<<<< HEAD
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
=======
# Fadapay_Lara_API
C'est cet API j'ai consommé dans le dépôt flutter pour la transaction Fedapay.
>>>>>>> bd2cb37793ddbd516a285317e0ed16f9a064f688

Voici un modèle de **README** pour expliquer comment utiliser votre API Laravel pour FedaPay et la consommer dans Flutter, avec un accent particulier sur l'importance des clés API en fonction du type de compte (sandbox ou live).

---

# Documentation de l'API FedaPay pour Laravel

## Introduction

Cette API a été conçue pour permettre l'intégration des services FedaPay avec une application Flutter. Vous pouvez l'utiliser pour effectuer des transactions de paiement en ligne via FedaPay, en choisissant entre un environnement **sandbox** (test) ou **live** (production). Suivez les étapes ci-dessous pour configurer, utiliser et intégrer l'API dans votre projet.

## Prérequis

- **PHP 8.0 ou supérieur** avec Laravel 10.x
- Clé API de FedaPay (disponible sur le tableau de bord de votre compte FedaPay)
- Serveur fonctionnel (ex: **XAMPP**, **Laragon**, **VPS**, etc.)
- Application Flutter pour consommer l'API

## Étape 1 : Installation de l'API Laravel

### 1.1 Clonez le projet

Si vous n'avez pas encore cloné le dépôt, utilisez la commande suivante pour cloner le repository de l'API :

```bash
git clone https://github.com/Mahou25/Fadapay_Lara_API.git
```

### 1.2 Installez les dépendances

Accédez au dossier du projet et installez les dépendances nécessaires via Composer :

```bash
cd Fadapay_Lara_API
composer install
```

### 1.3 Configurez votre fichier `.env`

Assurez-vous d'avoir configuré votre clé API dans le fichier `.env`. Les variables suivantes doivent être ajoutées ou mises à jour avec vos informations FedaPay :

```env
FEDAPAY_API_KEY=sk_live_-IYaLRe_b87hNRE5aOA_aV05    # Votre clé API (live ou sandbox)
FEDAPAY_ENVIRONMENT=sandbox                         # Définir l'environnement (sandbox ou live)
```

- `FEDAPAY_API_KEY` : Cette clé est utilisée pour authentifier votre application auprès de FedaPay. Si vous êtes en **sandbox**, utilisez la clé API en mode test. Pour la production, vous devez utiliser une clé API live.
- `FEDAPAY_ENVIRONMENT` : Ce paramètre définit si vous êtes en mode **sandbox** (pour les tests) ou **live** (pour la production). Ne changez ce paramètre en **live** que lorsque vous êtes prêt à accepter des paiements réels.

**Note importante sur les clés API :**  
Les clés **sandbox** sont utilisées pour effectuer des tests sans argent réel, tandis que les clés **live** traitent des transactions réelles. Il est crucial de ne pas exposer votre clé **live** dans le code source ou dans des endroits publics comme GitHub, car elle donne accès à votre compte de production.

## Étape 2 : Routes API Laravel

### 2.1 Définition des routes

Dans le fichier `routes/api.php`, la route pour effectuer une transaction est définie comme suit :

```php
Route::post('/transaction', [TransactionController::class, 'createTransaction']);
```

Cela signifie que vous pouvez effectuer une transaction via une requête **POST** sur l'URL `/api/transaction`.

### 2.2 Structure de la réponse

Lors de la création d'une transaction via l'API, une réponse JSON contenant les informations de la transaction sera retournée. Exemple de réponse :

```json
{
  "transaction": {
    "id": 283421,
    "reference": "trx_sQk_1731420194762",
    "amount": 2000,
    "currency": "XOF",
    "status": "pending",
    "created_at": "2024-11-12T14:03:14.762Z"
  }
}
```

Si une erreur survient, un message d'erreur détaillé sera retourné, comme dans cet exemple :

```json
{
  "error": "Erreur d'authentification"
}
```

## Étape 3 : Consommation de l'API dans Flutter

Pour consommer cette API dans une application Flutter, vous devez envoyer une requête POST à l'endpoint `http://<votre_serveur>/api/transaction`. Voici un exemple de code Flutter pour intégrer l'API :

### 3.1 Exemple de code Flutter

```dart
import 'package:http/http.dart' as http;
import 'dart:convert';

Future<void> createTransaction() async {
  final response = await http.post(
    Uri.parse('http://<votre_serveur>/api/transaction'),
    headers: {
      'Content-Type': 'application/json',
    },
    body: json.encode({
      'description': 'Transaction for John Doe',
      'amount': 2000,
      'currency': 'XOF',
      'callback_url': 'https://votre-callback-url.com/callback',
      'firstname': 'John',
      'lastname': 'Doe',
      'email': 'john.doe@example.com',
      'phone_number': '+22997808080',
      'country': 'BJ',
    }),
  );

  if (response.statusCode == 200) {
    print('Transaction réussie: ${response.body}');
  } else {
    print('Erreur lors de la création de la transaction: ${response.body}');
  }
}
```

### 3.2 Paramètres de la requête

Les paramètres à envoyer sont :

- **description** : Une description de la transaction.
- **amount** : Le montant de la transaction (en centimes).
- **currency** : La devise (par exemple, `XOF` pour le franc CFA).
- **callback_url** : L'URL qui sera appelée une fois la transaction terminée.
- **firstname**, **lastname**, **email** : Informations sur le client.
- **phone_number** : Le numéro de téléphone du client.
- **country** : Le code du pays du client (ex. : `BJ` pour le Bénin).

### 3.3 Réponse de l'API

La réponse contiendra les informations suivantes sur la transaction :

- **transaction** : Détails de la transaction effectuée (ID, référence, montant, etc.).

Si un problème survient (ex. : mauvaise clé API), un message d'erreur sera renvoyé.

## Étape 4 : Sécurité et bonnes pratiques

### 4.1 Sécuriser l'API

- **Utilisez des clés API différentes pour le mode sandbox et live.** Ne partagez jamais votre clé API live publiquement.
- **Protégez les informations sensibles**, comme le numéro de téléphone et l'email, en utilisant HTTPS pour toutes les requêtes API.

### 4.2 Validation des entrées

Avant d'envoyer des données à l'API FedaPay, vous devez valider les informations côté client (Flutter) et côté serveur (Laravel) pour éviter les erreurs.

### 4.3 Vérification des erreurs

Si une erreur est renvoyée par l'API, vous devrez gérer correctement les réponses d'erreur côté client et afficher des messages appropriés à l'utilisateur pour qu'il sache ce qui a échoué.

---

## Conclusion

Vous avez maintenant les étapes pour intégrer et utiliser l'API FedaPay dans votre projet Laravel et Flutter. Assurez-vous de bien configurer vos clés API et de respecter les meilleures pratiques pour garantir une utilisation sécurisée et optimale de l'API.
