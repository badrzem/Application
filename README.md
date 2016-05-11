# Application

Carnet Adresse

Rest api:

api/users/id => retourne les informations sur l'utilisateur selon id.

Affichage : {"id":1,"username":"test","email":"test@gmail.com"}

api/users => retourne tous les informations des utilisateurs.

Affichage: [{"id":1,"username":"test","email":"test@gmail.com"},{"id":2,"username":"test2","email":"test@hotmail.fr"}]

api/contacts/id => retourne les informations sur tous les contacts d'un utilisateur selon son id.

Affichage: [{"id":1,"user":{"id":1,"username":"test","email":"test@gmail.com"},"name":"Contact1","telephone":"1234567890","sexe":"Femme","email":"contact1@gmail.com","adresse":"5 rue jean jaures","siteweb":"www.google.fr"}]
