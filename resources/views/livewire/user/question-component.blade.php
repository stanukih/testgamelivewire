<div>
    <form wire:submit='save'>
        <label for="question_text" class="form-label">Kysymys</label>
        <input type="text" wire:model='question_text' id='question_text' class="form-control">

        <label for="answer1" class="form-label">Vaihtoehto 1</label>
        <input type="text" wire:model='answer1' id='answer1' class="form-control">
        <label for="answer2" class="form-label">Vaihtoehto 2</label>
        <input type="text" wire:model='answer2' id='answer2' class="form-control">
        <label for="answer3" class="form-label">Vaihtoehto 3</label>
        <input type="text" wire:model='answer3' id='answer3' class="form-control">
        <label for="answer4" class="form-label">Vaihtoehto 4</label>
        <input type="text" wire:model='answer4' id='answer4' class="form-control">
        
        <label for="correct" class="form-label">Oikea vastaus</label>
        <input type="number" wire:model='correct' id='question_text' class="form-control" min="1" max="4">

        <label for="comment" class="form-label">Kuvaus</label>
        <textarea wire:model="comment" id='comment' class="form-control mb-2"></textarea> 
        <button type="submit" class="btn btn-primary">Tallenna</button>
    </form>
</div>
