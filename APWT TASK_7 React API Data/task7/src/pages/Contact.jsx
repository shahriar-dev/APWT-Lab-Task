import React, { useState } from 'react'
import Button from 'react-bootstrap/Button';
import 'bootstrap/dist/css/bootstrap.min.css'; 

const Contact = () => {

  const [state, setState] = useState("To Send an Email, ")
  const [btnColor, setBtnColor] = useState("primary")
  const [btnMessage, setBtnMessage] = useState("Click Me!")
  const [disable, setDisable] = useState(false)

  const sendEmail = () => {
    setState("Email has been sent! THANK YOU...")
    setBtnColor("success")
    setBtnMessage("Sent")
    setDisable(true)
  }




  return (
    <>
      <h1>This is Contact Page</h1>
      <hr/>
      <p>abir123@email.com</p>
      <span><h3>{state}</h3><Button variant={btnColor} onClick={() => sendEmail()} disabled={disable}>{btnMessage}</Button>{' '}</span>
    </>
  )
}

export default Contact