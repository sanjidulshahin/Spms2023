<?php 
  include 'connect.php'; 
  session_start(); 

  if(isset($_SESSION['ID'])){
    $f_ID = $_SESSION['ID'];
  }else{
    // handle the case when $ID is not set in the session
    echo  'f_ID is not set';
  }
  
?>

<?php 
   

    if (isset($_POST['apply'])) {
        // Retrieve the form data
        $student_id = $_POST['student-id'];
        $educational_year = $_POST['educational-year'];
        $educational_semester = $_POST['educational-semester'];
        $enrolled_course = $_POST['enrolled-course'];
        $enrolled_section = $_POST['enrolled-section'];
        $marks = $_POST['marksObtained'];
        

    

        // SEARCHING WHETHER SECTION IS ALREADY PRESENT IN THE DATABASE OR NOT
        $sql = "SELECT sectionID FROM section_t where sectionNum ='$enrolled_section' AND 
              courseID = '$enrolled_course' AND year = '$educational_year' AND
                 semester = '$educational_semester'AND facultyID ='$f_ID'";
        $res = mysqli_query($con, $sql);
        
        

        // IF SECTION IS NOT PRESENT IN THE DATABASE, WE ARE ADDING THAT SECTION 
        if (mysqli_num_rows($res) == 0) {
            $sql = "INSERT INTO section_t (sectionNum,semester,courseID,facultyID,year)
              VALUES ($enrolled_section,'$educational_semester','$enrolled_course',
                  $f_ID,$educational_year)";
            $res = mysqli_query($con,$sql); 

            // fetching section Id of the newly inserted section 
            $sql = "SELECT sectionID FROM section_t where sectionNum ='$enrolled_section' AND 
              courseID = '$enrolled_course' AND year = '$educational_year' AND
                 semester = '$educational_semester'AND facultyID ='$f_ID'";
            $res = mysqli_query($con, $sql);
            $row = mysqli_fetch_assoc($res); 
            $sectionID = $row['sectionID'];
            
        }
        else{
            // fetching section id to use fill up registration table
            $row = mysqli_fetch_assoc($res); 
            $sectionID = $row['sectionID'];
        }

    // CODE FOR FILL UP THE REGISTRATION TABLE

        

        $sql = "INSERT INTO registration_t (sectionID,studentID)
             VALUES ($sectionID,$student_id)";
        $res = mysqli_query($con,$sql);

        

    // CODE FOR FILL UP THE STUDENT COURSE PERFORMANCE TABLE

        // fetching registration ID

        $sql = "SELECT registrationID FROM registration_t 
               WHERE sectionID =$sectionID AND studentID =$student_id";
        $res = mysqli_query($con,$sql);
        $row = mysqli_fetch_assoc($res);
        $registrationID = $row['registrationID'];

        // deriving gpa from totalmarksobtained

        if ($marks>=90){
            $gpa =4;
        }else if ($marks>=85){
            $gpa = 3.7;
        }else if ($marks>=80){
            $gpa= 3.3;
        }
        else if ($marks>=75){
            $gpa = 3;
        }
        else if ($marks>=70){
            $gpa = 2.7;
        }
        else if ($marks>=65){
            $gpa = 2.3;
        }else if ($marks>=60){
            $gpa = 2;
        }else if ($marks>=55){
            $gpa =1.7;
        }else if ($marks>=50){
            $gpa = 1.3;
        }else if ($marks>=45){
            $gpa = 1;
        }else {
            $gpa = 0;
        }
        // inserting data into student_course_performance_t

        $sql = "INSERT INTO student_course_performance_t (registrationID,totalMarksObtained,gradePoint)
           VALUES($registrationID,$marks,$gpa)";
        $res = mysqli_query($con,$sql);



        
        

        

        $sql = "INSERT INTO backlog_data_t(sectionNUM,studentID,semester,courseID,facultyID,
              year,totalMarksObtained) VALUES
               ($enrolled_section,$student_id,'$educational_semester','$enrolled_course',
               $f_ID,$educational_year,$marks)";

        $result = mysqli_query($con, $sql);
        if ($result){
            // $_SESSION['message'] = "Your data submission is successful";
            header("location:studentcloinfo.php");
        } else {
            echo "Submission Failed";
        }

        // INSERTING DATA INTO EXAM TABLE 

        // checking whether the examName and section is already there or not
        

        $sql= "INSERT INTO exam_t (examName,sectionID) VALUES
           ('CSE303FinalSummer2023Exam',$sectionID)";
        $res = mysqli_query($con,$sql);
        

        // fetching examID for inserting in answer table
        $sql = "SELECT examID FROM exam_t WHERE 
            examName ='CSE303FinalSummer2023Exam' AND sectionID = $sectionID";
        $res = mysqli_query($con,$sql);
        $row = mysqli_fetch_assoc($res);
        $examID = $row['examID'];
        

        // INSERTING DATA INTO QUESTION TABLE
        $sql = "INSERT INTO question_t (questionDetails,markPerQuestion,questionNum,
          difficultyLevel,examID,courseID,coNum) VALUES 
            ('what is the name',100,5,3,$examID,'$enrolled_course',3)";
        $res = mysqli_query($con,$sql);
        
        // fetching questionID to insert in the answer table

        // $sql = "SELECT questionID FROM question_t WHERE questionDetails ='what is the name',
        //    AND markPerQuestion=100 AND questionNum=3 AND difficultyLevel = 3 AND 
        //        examID = $examID AND courseID = '$enrolled_course' AND coNum =4";
        // $res = mysqli_query($con,$sql);
        // $row = mysqli_fetch_assoc($res);
        // $questionID = $row['questionID'];
        



        // INSERTING DATA INTO ANSWER TABLE 
        $sql = "INSERT INTO answer_t (answerDetails,answerNum,markObtained,registrationID,
          questionID,examID) VALUES ('abcde',5,$marks,$registrationID,0,$examID)";
        $res = mysqli_query($con,$sql);
        

        

    }
?>
