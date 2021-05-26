/* JavaScript Test */
// A
function fixSentence (sentence) {
	var output = "";
	for (var i = 0; i < sentence.length; i++) {
  	var isCurrentUpper = sentence.charCodeAt(i) > 64 && sentence.charCodeAt(i) < 91 ? true : false;
    var isNextUpper = sentence.charCodeAt(i + 1) > 64 && sentence.charCodeAt(i + 1) < 91 ? true : false;
    
    if (isCurrentUpper == false && isNextUpper == true) {
    	output = output + sentence[i] + " ";
    } else {
    	output = output + sentence[i];
    }
  }
  
  return output;
} 

console.log(fixSentence("TheQuickBrownFoxJumpsOverTheLazyDog."));

// B
const responseData = {
  "success":true,
  "employees":[
    {
      "id":"1",
      "firstName":"John",
      "lastName":"Doe",
      "birthday":"1990-05-07",
      "gender":{
        "male":true,
        "female":false
      },
      "knownLanguage":[
        "English",
        "Japanese",
        "Chinese"
      ]
    },
    {
      "id":"2",
      "firstName":"Lina",
      "lastName":"Art",
      "birthday":"1994-08-05",
      "gender":{
        "male":false,
        "female":true
      },
      "knownLanguage":[
        "English",
        "Japanese"
      ]
    }
  ]
}

function createContactCard (data) {
	document.write("<input type='text' value='" + data.firstName + " " + data.lastName + "' readonly />");
  document.write("<br />");
  document.write("<input type='date' value='" + data.birthday + "' readonly />");
  document.write("<br />");
  
  if (data.gender.male) {
    document.write("<input type='radio' name='gender' id='genderMale' value='Male' checked />");
  } else {
    document.write("<input type='radio' name='gender' id='genderMale' value='Male' />");
  }
  document.write("<label for='genderMale'>Male</label>");
  document.write("<br />");
  if (data.gender.female) {
    document.write("<input type='radio' name='gender' id='genderFemale' value='Female' checked />");
  } else {
    document.write("<input type='radio' name='gender' id='genderFemale' value='Female' />");
  }
  document.write("<label for='genderFemale'>Female</label>");
  document.write("<br />");
  
  for (x = 0; x < data.knownLanguage.length; x++) {
    document.write("<input type='checkbox' name='knownLanguage' id='language" + data.knownLanguage[x] +"' value='" + data.knownLanguage[x] + "' checked />");
    document.write("<label for='genderMale'>" + data.knownLanguage[x] + "</label>");
    document.write("<br />");
  }
}

function getEmployeeData () {
	// there should be xhttp or ajax request here if api link is working
  // let variable responseData be the response data 
  
  const employees = responseData.employees;
  let sortedEmployees = employees;
  
  for (x = 0; x < sortedEmployees.length; x++) {
  	for (y = 0; y < sortedEmployees.length - 1; y++) {
    	if (sortedEmployees[y].lastName > sortedEmployees[y + 1].lastName) {
				temp = sortedEmployees[y];
        sortedEmployees[y] = sortedEmployees[y + 1];
        sortedEmployees[y + 1] =  temp;
			}
    }
  }
  
  createContactCard (sortedEmployees[0]);
}

getEmployeeData ();
