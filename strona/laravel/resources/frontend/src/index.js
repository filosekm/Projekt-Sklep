import React from 'react'
import ReactDOM from 'react-dom'
import {
    BrowserRouter as Router,
    Routes,
    Route,
    useRoutes,
} from 'react-router-dom';

import './style.css'
import Kontakt from './views/kontakt'
import Home from './views/home'
import ONas from './views/o-nas'
import Opony from "./views/opony";
import SkrzyniaBiegow from "./views/skrzynia-biegow";
import Zawieszenie from "./views/zawieszenie";
import Silnik from "./views/silnik";
import Dashboard from "./pages/Dashboard";
import './charts/ChartjsConfig';
import './css/style.css';
function AppRoutes() {
    const routes = useRoutes(
        [
          {path:'/kontakt', element:<Kontakt/>},
          {path:'/', element:<Home />},
          {path:'/o-nas', element:<ONas />},
            {path:'/skrzynia-biegow', element:<SkrzyniaBiegow />},
            {path:'/opony', element:<Opony />},
            {path:'/silnik', element:<Silnik />},
            {path:'/zawieszenie', element:<Zawieszenie />},
          ]);
    return routes;
}


function App(){
    return (
        <Router>
            <AppRoutes />
        </Router>
    )
}
export default App;
ReactDOM.render(<App />, document.getElementById('app'))
