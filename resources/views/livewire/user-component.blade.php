<div class="row">
    <div class="col">
        <h1>Aiheet</h1>
        @foreach ($topics as $topic)
            <ul>
                <p>
                    {{ $topic->title }}
                </p>
            </ul>
        @endforeach
    </div>
    <div class="col">
        <h1>Kysymykset</h1>
    </div>
    <div class="col">
        <h1>Tehtävä</h1>
    </div>
    <div class="col">
        <h1>
            Salasanan päivittäminen
        </h1>
    </div>
</div>