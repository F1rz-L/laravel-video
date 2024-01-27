

<style>
    .mb-10{
        margin-bottom: 10px;
    }
</style>


<h2>Contact Form</h2>
<form action="{{ route('store') }}" method="POST">
    @csrf
    <div class="mb-10">
        <label for="">Name: </label>
        <input type="text" name="name">
    </div>
    <div class="mb-10">
        <label for="">Email: </label>
        <input type="text" name="email">
    </div>
    <div class="mb-10">
        <label for="">Message: </label>
        <textarea name="message" id="" cols="30" rows="10" style="height: 50px; width: 150px;"></textarea>
    </div>
    <div class="mb-10">
        <button type="submit">Submit</button>
    </div>
</form>