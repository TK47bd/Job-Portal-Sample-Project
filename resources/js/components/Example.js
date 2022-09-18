import ReactDOM from 'react-dom';
import axios from 'axios';
import {React,useState} from 'react';


function Example() {

    const [value, setValue]=useState([]);
    const fetchData = fetch('http://127.0.0.1:8000/react-data').then(response=>{return response.json()}).then(result=>{setValue(result)});

    return (
        <div className="container">
            <div className="row justify-content-center">
                <div className="col-md-8">
                    <div className="card">
                        <div className="card-header">Example Component</div>

                        <div className="card-body">I'm an React example component!</div>
                        <div> TK47 sent me here...  </div>
                        <p> value : {value.value} </p>
                    </div>
                </div>
            </div>
        </div>
    );
}

export default Example;

if (document.getElementById('example')) {
    ReactDOM.render(<Example />, document.getElementById('example'));
}
