import React from 'react';
import { Link } from 'react-router-dom';
import './home.css'
const AuthButtons = ({ isLoggedIn, onLogout }) => {
    if (isLoggedIn) {
        return (
            <a href="/logout" className="btn btn-primary" class="button" >
                Logout
            </a>
        );
    }

    return (
        <div >
            <a href="/register" className="btn btn-primary" class="button">Register</a>
        <a></a>
            <a href="/login" className="btn btn-primary" class="button">Login</a>
        </div>
    );
}
export default AuthButtons;
