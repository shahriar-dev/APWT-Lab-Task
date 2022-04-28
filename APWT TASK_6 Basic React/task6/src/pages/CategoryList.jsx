import React, {useState, useEffect} from 'react'
import ButtonGroup from 'react-bootstrap/ButtonGroup'
import Button from 'react-bootstrap/Button';
import Table from '../components/table/Table'
import { Link } from "react-router-dom"
import axios from 'axios';

const CategoryList = () => {

  const categoryListTableHead = [
      "",
    "Category Name En",
    "Category Name Bn",
    "",
  ]

  const [categoryList, setCategoryList] = useState([])
  useEffect(() => {
        axios.get("http://127.0.0.1:8000/api/category/view")
          .then((res) => {
              console.log(res)
              setCategoryList(res.data)
          })
          .catch((err) => console.log(err))
  }, [])

  const renderHead = (item, index) => <th key={index}>{item}</th>
  const renderBody = (item, index) => (
    <tr key={index}>
        <td>{item.id}</td>
        <td>{item.category_name_en}</td>
        <td>{item.category_name_bn}</td>
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
      <h1>Category List</h1>
      <Table
        headData={categoryListTableHead}
        renderHead={(item, index) =>
          renderHead(item, index)
        }
        bodyData={categoryList}
        renderBody={(item, index) =>
          renderBody(item, index)
        }
      />
    </>
  )
}

export default CategoryList