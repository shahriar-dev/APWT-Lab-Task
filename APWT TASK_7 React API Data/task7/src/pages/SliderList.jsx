import React, {useState, useEffect} from 'react'
import ButtonGroup from 'react-bootstrap/ButtonGroup'
import Button from 'react-bootstrap/Button';
import Table from '../components/table/Table'
import studentList from '../configs/studentList'
import { Link } from "react-router-dom"
import axios from 'axios';

const SliderList = () => {

  const sliderListTableHead = [
      "",
    "Name",
    "",
  ]

  const [sliderList, setSliderList] = useState([])
  useEffect(() => {
        axios.get("http://127.0.0.1:8000/api/slider/view")
          .then((res) => {
              console.log(res)
              setSliderList(res.data)
          })
          .catch((err) => console.log(err))
  }, [])

  const renderHead = (item, index) => <th key={index}>{item}</th>
  const renderBody = (item, index) => (
    <tr key={index}>
        <td>{item.id}</td>
        <td>{item.title}</td>
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
      <h1>Slider List</h1>
      <Table
        headData={sliderListTableHead}
        renderHead={(item, index) =>
          renderHead(item, index)
        }
        bodyData={sliderList}
        renderBody={(item, index) =>
          renderBody(item, index)
        }
      />
    </>
  )
}

export default SliderList