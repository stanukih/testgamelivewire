<div>
    <h1>Tulostaulukko</h1>
    <table class="table" style="width: 100%">
        <tr>
            <th scope="col">Nimi</td>
            <th>Pisteet</td>
            <th>Kysymysten määrä</td>
        </tr>
        @foreach ($scores as $score)
            <tr wire:key="'score'.{{ $score->id }}">
                <td>{{ $score->name }}</td>
                <td>{{ $score->number_of_correct }}</td>
                <td>{{ $score->number_of_questions }}</td>
            </tr>
        @endforeach
    </table>
    @if ($quantity>$page*25)
        <button wire:click='next'>-></button> 
    @endif
    @if ($page>1)
        <button wire:click='previous'><-</button>        
        
    @endif
    
</div>