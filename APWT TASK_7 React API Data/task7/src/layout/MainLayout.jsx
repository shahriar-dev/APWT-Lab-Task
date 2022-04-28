import React from 'react'
import './main-layout.scss'
import { Outlet } from 'react-router-dom'
import Header from '../components/header/Header'

const MainLayout = () => {
    return (
        <>
            <Header />
            <div className="main">
                <div className="main__content">
                    <Outlet />
                </div>
            </div>
        </>
    )
}

export default MainLayout
