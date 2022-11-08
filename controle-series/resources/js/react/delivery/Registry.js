import React, { Component } from "react";
import ReactDOM from 'react-dom';

export default class Registry extends Component {
    constructor(props){
        super(props);
    }

    test() {
        const headers = [
            ['Content-Type', 'text/html', 'extra'],
            ['Accept'],
        ];
        fetch('https://example.com/', { headers });
    }

    render() {
        return (

            <table className="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome do cliente</th>
                    <th scope="col">Data de entrega</th>
                    <th scope="col">Ponto de partida</th>
                    <th scope="col">Ponto de destino</th>
                </tr>
                </thead>
                <tbody>
                {/*@foreach($series as $serie)*/}
                <tr>
                    <th scope="row">'id'</th>
                    <td>'clientName'</td>
                    <td>'dtReceive'</td>
                    <td>'startPoint'</td>
                    <td>'endPoint'</td>
                </tr>
                {/*@endforeach*/}
                </tbody>
            </table>
        );
    }


}

