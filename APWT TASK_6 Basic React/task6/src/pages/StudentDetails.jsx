import React from 'react'
import { useParams } from "react-router-dom";
import studentList from '../configs/studentList'

const StudentDetails = (props) => {
    const {id} =useParams();
    let student = studentList.find(value => value.id === parseInt(id))
  return (
    <>
        <h1>Student Details</h1>
        <div>
            <p><strong>Name: </strong>{student.name}</p>
            <p><strong>Student Id: </strong>{student.student_id}</p>
            <p><strong>CGPA: </strong>{student.cgpa}</p>
            <p><strong>Session: </strong>{student.session}</p>
        </div>
    </>
  )
}

export default StudentDetails