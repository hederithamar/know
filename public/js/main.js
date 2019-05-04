var firebaseConfig = {
            apiKey: "AIzaSyA5F6Y-EGwm0BdLjs6rumMJsQGtkw1QGDE",
            authDomain: "micv-32b76.firebaseapp.com",
            databaseURL: "https://micv-32b76.firebaseio.com",
            projectId: "micv-32b76",
            storageBucket: "micv-32b76.appspot.com",
            messagingSenderId: "155279662733",
            appId: "1:155279662733:web:e288769740ad6d03"
          };
          // Initialize Firebase
var defaultApp = firebase.initializeApp(firebaseConfig);

var database = firebase.database();
var jobCollection = database.ref("/jobCollection");
var collectionContent;

jobCollection.on("value", function(snapshot){
	collectionContent = snapshot.val();
	fillExperience()  
});

var referencia=database.ref("/jobCollection");

var professionalExp = [
	{
		name:"Kodemia",
		role:"Lead Teacher",
		period:"2014 - Actual",
		activityDescription: "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, quis? Tempora aut, omnis at. Ad."
	},{
		name:"AN Digital",
		role:"Lead Front-End Developer",
		period:"2014 - Actual",
		activityDescription: "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, quis? Tempora aut, omnis at. Ad."
	}
]


function fillExperience(){
	$("#professional-data-wrapper .card-body").empty();
    $.each(collectionContent, function(key, value) {
        console.log(key);
        console.log(value);
        $("#professional-data-wrapper .card-body").append(
            `<div class="experience-item border rounded p-3 mb-3">
         	 <input type="text" placeholder="Indica la descripcion" value="Developer">
			<h2 class="name font-weight-bold">${value.name}</h2>
			<p class="role font-italic font-weight-bold">${value.role}</p>
			<p class="period text-primary mb-0">${value.period}</p>
			<p class="activity-description">${value.activityDescription}</p>
<button type="button" class="btn button-primary" onclick="deleteJob('${key}')">Eliminar</button>
		</div>`
        )
    })
}

function deleteJob(job) {
	var referencia=database.ref("/jobCollection/"+job).remove();
}


function pushExp(job) {
	professionalExp.push(job);
	$("#professional-data-wrapper .card-body").empty();
	fillExperience();
}

function getJobData(){
	var jobName = $("#name").val();
	var jobRole = $("#role").val();
	var jobPeriod = $("#period").val();
	var jobDescription = $("#description").val();

	var newJob = {}
	newJob.name = jobName;
	newJob.role = jobRole;
	newJob.period = jobPeriod;
	newJob.description = jobPeriod;

	jobCollection.push(newJob);
}