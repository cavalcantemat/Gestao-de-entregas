import React, { Component } from "react";
import ReactDOM from 'react-dom';

export default class Registry extends Component {
    constructor(props){
        super(props);
    }

    test() {

        fetch('/registry/save')
            .then((response)=> {
            return response.json();
        })
            .then((data) => {
            console.log(data);
        });
    }

    render() {
        return (
            <form>
                <div className="mb-3">
                    <label htmlFor="name" className="form-label">Nome do cliente</label>
                    <input type="text" id="clientName" name="clientName" className="form-control"/>
                </div>
                <div className="mb-3">
                    <label htmlFor="dtReceive" className="form-label">Data de entrega</label>
                    <input type="text" id="dtReceive" name="dtReceive" className="form-control"/>
                </div>
                <div className="mb-3">
                    <label htmlFor="startPoint" className="form-label">Ponto de partida</label>
                    <input type="text" id="startPoint" name="startPoint" className="form-control"/>
                </div>
                <div className="mb-3">
                    <label htmlFor="endPoint" className="form-label">Ponto de Destino</label>
                    <input type="text" id="endPoint" name="endPoint" className="form-control"/>
                </div>
                <button className="btn btn-primary" onClick={this.test()}>Adicionar</button>
            </form>

        );
    }
}

