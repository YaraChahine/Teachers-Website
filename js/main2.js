change_tutor();

function change(){
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

  function change_tutor() {
    var val = document.getElementById("education-level").value;

    if (val == "highschool-degree") {
      document.getElementById("school-label").style.display = "inline";
      document.getElementById("school-name").style.display = "inline";
      document.getElementById("school-label").innerHTML = "High School Name "
      document.getElementById("major-label").style.display = "none";
      document.getElementById("major-name").style.display = "none";
      document.getElementById("common").style.display = "inline";
      document.getElementById("add-button").style.display = "inline";
      document.getElementById("remove-button").style.display = "inline";


    }
    else {
      document.getElementById("school-label").style.display = "inline";
      document.getElementById("school-name").style.display = "inline";
      document.getElementById("school-label").innerHTML = "College Name ";
      document.getElementById("major-label").style.display = "inline";
      document.getElementById("major-label").style.marginRight = "80px";
      document.getElementById("major-name").style.display = "inline";
      document.getElementById("common").style.display = "inline";
      document.getElementById("add-button").style.display = "inline";
      document.getElementById("remove-button").style.display = "inline";






    }
  }