<?php

    /**
    * @backupGlobals disabled
    * @backupStaticAttributes disabled
    */

    require_once "src/Student.php";

    $server = 'mysql:host=localhost;dbname=registry_test';
    $username = 'root';
    $password = 'root';
    $DB = new PDO($server, $username, $password);

    class StudentTest extends PHPUnit_Framework_TestCase
    {
        protected function tearDown()
        {
            Student::deleteAll();
        }

        function test_setName()
        {
            //Arrange
            $name = "Joleen";
            $enrollment = "8/25/2015";
            $test_student = new Student($name, $enrollment);
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
            $enrollment = "8/25/2015";
            $test_student = new Student($name, $enrollment);

            //Act
            $result = $test_student->getName();

            //Assert
            $this->assertEquals($name, $result);
        }

        function test_setEnrollDate()
        {
            //Arrange
            $name = "Joleen";
            $enrollment = "8/25/2015";
            $test_student = new Student($name, $enrollment);
            $new_date = "9/18/2015";

            //Act
            $test_student->setEnrollment($new_date);
            $result = $test_student->getEnrollment();

            //Assert
            $this->assertEquals($new_date, $result);
        }

        function test_getEnrollDate()
        {
            //Arrange
            $name = "Joleen";
            $enrollment = "8/25/2015";
            $test_student = new Student($name, $enrollment);

            //Act
            $result = $test_student->getEnrollment();

            //Assert
            $this->assertEquals($enrollment, $result);
        }

        function test_getId()
        {
            //Arrange
            $name = "Joleen";
            $enrollment = "8/25/2015";
            $id = 1;
            $test_student = new Student($name, $enrollment, $id);

            //Act
            $result = $test_student->getId();

            //Assert
            $this->assertEquals($id, $result);
        }

        function test_save()
        {
            //Arrange
            $name = "Joleen";
            $enrollment = "2015-09-18";
            $test_student = new Student($name, $enrollment);
            $test_student->save();

            //Act
            $result = Student::getAll();

            //Assert
            $this->assertEquals($test_student, $result[0]);
        }

    }

?>
