<div>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                    <tr>
                        <th>Kategoriat</th>
                        <th>Toiminnot</th>
                    </tr>
                <tbody>
                    @foreach ($topics as $topic)
                        <livewire:user.topics-component :topic="$topic" :key="'$topic' . $topic->id">
                    @endforeach
                <tr>
                    <td colspan="2">
                        <form wire:submit='createTopic' class="d-flex align-items-end gap-2">
                            <div class="d-flex flex-column flex-grow-1">
                                <label for="newTopic">Lisää uusi Kategoria</label>
                                <input type="text" wire:model="newTopic" id="newTopic" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-outline-success btn-icon">
                            <span class="material-icons">add_box</span>
                            </button>
                        </form>
                    </td>
                </tr>
                </tbody>
                </thead>
            </table>

        </div>



    </div>

    <div class="row">
        @if ($activeTopic)
            

            <div class="col">
                <h1>Valittu aihe: {{ $activeTopic->title }}</h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Kysymykset</th>
                            <th scope="col" colspan="2">Toiminnot</th>
                        </tr>
                    <tbody>

                        @foreach ($questions as $question)
                            <livewire:user.questions-component :question="$question" :key="'$question_title' . $question->id">
                        @endforeach
                            <tr>
                                <td colspan="2">
                                    <form wire:submit='createQuestion'>
                                        <label for="newQuestion">Uusi kysymys</label>
                                        <input type="text" wire:model="newQuestion" id="newQuestion" class="form-control mb-2">
                                        <button type="submit" class="btn btn-outline-success btn-icon">
                                        <span class="material-icons">add_box</span>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                    </tbody>
                    </thead>
                </table>

            </div>
            <div class="col">
                @if ($activeQuestion)
                    <div class="col">
                        <h1>Valittu aihe: {{ $activeQuestion->title }}</h1>
                        <livewire:user.question-component :question="$activeQuestion" :key="'$question' . $activeQuestion->id">
                    </div>
                @endif
            </div>
        @endif

    </div>


    @if ($activeTopic)

    <div class="row">
        <livewire:play.score-component :activeTopicId="$activeTopic->id" :key="'activeTopicId'.$activeTopic->id">
        

    </div>
    @endif