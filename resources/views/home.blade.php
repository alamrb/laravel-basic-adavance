<div>

    {{ URL::current() }}
    {{ url()->current() }}
    <h3> {{ URL::full() }}</h3>
    <!-- The only way to do great work is to love what you do. - Steve Jobs -->
    @includeIf('common.header',['page'=>'This is come from home page props'])
    <x-messagebanner/>
    <h1> This is Home Page</h1>
</div>

<style>
    .success{
        background: #ededed;
        color: #000;
        padding: 3px 10px;
        border: 1px solid rd
    }
</style>
