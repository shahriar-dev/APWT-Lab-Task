import React, {useState, useEffect} from 'react'
import {Table as BTable} from 'react-bootstrap'

const Table = (props) => {

    const [dataShow, setDataShow] = useState(props.bodyData)

    useEffect(() => {
        setDataShow(props.bodyData)
    }, [props.bodyData])

  return (
    <>
    
    <BTable striped bordered hover variant="dark">
        {props.headData && props.renderHead ? (
            <thead>
                <tr>
                    {props.headData.map((item, index) =>
                        props.renderHead(item, index)
                    )}
                </tr>
            </thead>
        ) : (
            ""
        )}
        {props.bodyData && props.renderBody ? (
            <tbody>
                {dataShow?.map((item, index) =>
                    props.renderBody(item, index)
                )}
            </tbody>
        ) : null}
</BTable>
    </>
  )
}

export default Table