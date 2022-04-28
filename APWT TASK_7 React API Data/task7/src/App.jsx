import './assets/libs/boxicons-2.1.1/css/boxicons.min.css'
import './scss/App.scss'
import { BrowserRouter, Routes, Route } from 'react-router-dom'
import Contact from './pages/Contact'
import Home from './pages/Home'
import StudentList from './pages/StudentList'
import StudentDetails from './pages/StudentDetails'
import MainLayout from './layout/MainLayout'
import SliderList from './pages/SliderList'
import CategoryList from './pages/CategoryList'

function App() {
    return (
        <BrowserRouter>
            <Routes>
                <Route path="/" element={<MainLayout />}>
                    <Route index element={<Home />} />
                    <Route path="contacts" element={<Contact />} />
                    <Route path="student-list" element={<StudentList />} />
                    <Route path="slider-list" element={<SliderList />} />
                    <Route path="category-list" element={<CategoryList/>} />
                    <Route path="studentDetails/:id" element={<StudentDetails />} />
                </Route>
            </Routes>
        </BrowserRouter>
    )
}

export default App
