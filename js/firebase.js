function conectarFirebase(){

	var firebaseConfig = {
		    apiKey: "AIzaSyAi0MWd9xq-ORcGtrOiJdrUopQceM5bp18",
		    authDomain: "newangels-web.firebaseapp.com",
		    databaseURL: "https://newangels-web.firebaseio.com",
		    projectId: "newangels-web",
		    storageBucket: "",
		    messagingSenderId: "706586960436",
		    appId: "1:706586960436:web:a37c4fdf803505f8"
		  };
// Initialize Firebase
	return firebase.initializeApp(firebaseConfig);

}


