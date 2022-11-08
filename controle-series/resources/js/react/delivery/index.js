import ReactDOM from 'react-dom';
import Registry from "./Registry.js";

const app = document.getElementById('app');
const id = app.getAttribute('clientid');

ReactDOM.render(<Registry { ...{ id } }/>, document.getElementById("app"));

