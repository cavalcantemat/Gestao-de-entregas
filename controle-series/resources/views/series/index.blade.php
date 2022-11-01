<x-layout title="Cadastro de Entregas">
            <form action="/registry/save" method="post">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nome do cliente</label>
                    <input type="text" id="clientName" name="clientName" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="dtReceive" class="form-label">Data de entrega</label>
                    <input type="text" id="dtReceive" name="dtReceive" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="startPoint" class="form-label">Ponto de partida</label>
                    <input type="text" id="startPoint" name="startPoint" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="endPoint" class="form-label">Ponto de Destino</label>
                    <input type="text" id="endPoint" name="endPoint" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Adicionar</button>
            </form>
</x-layout>
