import React from 'react'
import ButtonGroup from 'react-bootstrap/ButtonGroup'
import Button from 'react-bootstrap/Button';
import Table from '../components/table/Table'
import studentList from '../configs/studentList'
import { Link } from "react-router-dom"

const StudentList = () => {

  const studentListTableHead = [
    "",
    "Name",
    "Id",
    "Semester",
    "CGPA",
    "Session",
    "",
  ]

  const renderHead = (item, index) => <th key={index}>{item}</th>
  const renderBody = (item, index) => (
    <tr key={index}>
        <td>{item.id}</td>
        <td>{item.name}</td>
        <td>{item.student_id}</td>
        <td>{item.semester}</td>
        <td>{item.cgpa}</td>
        <td>{item.session}</td>
        <td>
         <ButtonGroup aria-label="Basic example">
           <Link to={`/studentDetails/${item.id}`}>
              <Button variant="primary" id={item.id}>View Details</Button>
           </Link>
          
          <Button variant="success">Edit</Button>
          <Button variant="danger">Delete</Button>
         </ButtonGroup>
        </td>
    </tr>
)

  return (
    <>
      <h1>Student List</h1>
      <Table
        headData={studentListTableHead}
        renderHead={(item, index) =>
          renderHead(item, index)
        }
        bodyData={studentList}
        renderBody={(item, index) =>
          renderBody(item, index)
        }
      />
    </>
  )
}

export default StudentList