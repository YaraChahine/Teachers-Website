function change_student_education(){
  var val=document.getElementById("education").value;
  if (val=== "college") {
    document.getElementById("menu-label").style.display="none";
    document.getElementById("menu-course").style.display="none";
    document.getElementById("course-name-id").style.display="inline";
    document.getElementById("course-name").style.display="inline";


  }
  else{
   
    document.getElementById("menu-label").style.display="inline";
    document.getElementById("menu-course").style.display="inline";
    document.getElementById("course-name-id").style.display="none";
    document.getElementById("course-name").style.display="none";

  }
}

function change_tutor_education() {
    let val = document.getElementById("education-level").value;

    if (val == "highschool-degree") {
      document.getElementById("school-label").innerHTML = "High School Name "
      document.getElementById("school").placeholder = "High School Name "
      document.getElementById("field-label").innerHTML = "Field/degree";
      document.getElementById("field").placeholder = "i.e. General Sciences Baccalaureate";
    }
    else {
      document.getElementById("school-label").innerHTML = "College Name "
      document.getElementById("school").placeholder = "i.e. Lebanese American University "
      document.getElementById("field-label").innerHTML = "Major";
      document.getElementById("field").placeholder = "i.e. Computer Science";
    }
}

function change_level() {
  
  let level1 = document.getElementById("course1-level").value;

  if (level1 == "college") {
    document.getElementById("course1-input").style.display="inline-block";
    document.getElementById("course1-select").style.display="none";
  }
  else {
    document.getElementById("course1-input").style.display="none";
    document.getElementById("course1-select").style.display="inline-block";
  }

  let level2 = document.getElementById("course2-level").value;

  if (level2 == "college") {
    document.getElementById("course2-input").style.display="inline-block";
    document.getElementById("course2-select").style.display="none";
  }
  else {
    document.getElementById("course2-input").style.display="none";
    document.getElementById("course2-select").style.display="inline-block";
  }

  let level3 = document.getElementById("course3-level").value;

  if (level3 == "college") {
    document.getElementById("course3-input").style.display="inline-block";
    document.getElementById("course3-select").style.display="none";
  }
  
  else {
    document.getElementById("course3-input").style.display="none";
    document.getElementById("course3-select").style.display="inline-block";
  }

  let level4 = document.getElementById("course4-level").value;

  if (level4 == "college") {
    document.getElementById("course4-input").style.display="inline-block";
    document.getElementById("course4-select").style.display="none";
  }
  else {
    document.getElementById("course4-input").style.display="none";
    document.getElementById("course4-select").style.display="inline-block";
  }

}



function loadBookingData(button) {

  let row = $(button.parentElement.parentElement);
  console.log($(this).find("div"));
  let student = +row.find("[name='student']").text();
  let tutor = +row.find("[name='tutor']").text();
  let course = +row.find("[name='course']").text();
  let date = row.find("[name='date']").text();
  let days = row.find("[name='days']").text();

  dateArr = date.split("/");
  date = dateArr[2] + "-" + dateArr[1] + "-" + dateArr[0];

  daysArr = days.split(" ");

  $("#editform").find("[name='student']").val(student);
  $("#editform").find("[name='tutor']").val(tutor);
  $("#editform").find("[name='course']").val(course);
  $("#editform").find("[name='date']").val(date);

  $("#editform").find("[type='checkbox']").prop( "checked", false );
  daysArr.forEach(day => {
    $("#editform").find(`[name='${day}']`).prop( "checked", true );
  });

  console.log(row);

}