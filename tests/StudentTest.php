<?php

    require_once "src/Student.php";

    class StudentTest extends PHPUnit_Framework_TestCase
    {
        function test_setName()
        {
            //Arrange
            $name = "Joleen";
            $enroll_date = "8/25/2015";
            $test_student = new Student($name, $enroll_date);
            $new_name = "Babs";

            //Act
            $test_student->setName($new_name);
            $result = $test_student->getName();

            //Assert
            $this->assertEquals($new_name, $result);
        }

        function test_getName()
        {
            //Arrange
            $name = "Joleen";
            $enroll_date = "8/25/2015";
            $test_student = new Student($name, $enroll_date);

            //Act
            $result = $test_student->getName();

            //Assert
            $this->assertEquals($name, $result);
        }

        function test_setEnrollDate()
        {
            //Arrange
            $name = "Joleen";
            $enroll_date = "8/25/2015";
            $test_student = new Student($name, $enroll_date);
            $new_date = "9/18/2015";

            //Act
            $test_student->setEnrollDate($new_date);
            $result = $test_student->getEnrollDate();

            //Assert
            $this->assertEquals($new_date, $result);
        }

        function test_getEnrollDate()
        {
            //Arrange
            $name = "Joleen";
            $enroll_date = "8/25/2015";
            $test_student = new Student($name, $enroll_date);

            //Act
            $result = $test_student->getEnrollDate();

            //Assert
            $this->assertEquals($enroll_date, $result);
        }

        function test_getId()
        {
            //Arrange
            $name = "Joleen";
            $enroll_date = "8/25/2015";
            $id = 1;
            $test_student = new Student($name, $enroll_date, $id);

            //Act
            $result = $test_student->getId();

            //Assert
            $this->assertEquals($id, $result);
        }

        function test_save()
        {
            //Arrange
            $name = "Joleen";
            $enroll_date = "8/25/2015";
            $test_student = new Student($name, $enroll_date);

            //Act
            $test_student->save();

            //Assert
            $this->assertEquals($test_student, Student::getAll());
        }

    }

?>