<x-layout title="Lista de Entregas">
        <table class="table">
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
            @foreach($series as $serie)
                <tr>
                    <th scope="row">{{$serie->id}}</th>
                    <td>{{$serie->clientName}}</td>
                    <td>{{$serie->dtReceive}}</td>
                    <td>{{$serie->startPoint}}</td>
                    <td>{{$serie->endPoint}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

    <a href="/registry/create" class="btn btn-dark">Adicionar</a>
</x-layout>
