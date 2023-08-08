import React from 'react'
import ReactDOM from 'react-dom/client'
import App from './App.jsx'
import './index.css'

const TASKS = [
  { id: "1", name: "Test item 1", completed: true, visible: "visible"},
  { id: "2", name: "Test item 2", completed: false, visible: "visible"},
];

ReactDOM.createRoot(document.getElementById('root')).render(
  <React.StrictMode>
    <App tasks={TASKS}/>
  </React.StrictMode>,
)
