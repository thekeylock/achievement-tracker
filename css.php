<style>
    html{
        height: 100%;
        width: 100%;
    }

    body{
        margin: 0;
        padding: 0;
        background-color: purple;
    }

    .title{
        background-color: beige;
        padding: 20px 0;
        width: 100%;
        height: 37px;
    }

    .title h1{
        text-align: center;
        margin: 0;
        padding: 0;
    }

    .left-bar{
        float: left;
        overflow-y: scroll;
        overflow-x: none;
        height: calc(100vh - 77px);
        width: 500px;
    }

    .left-bar::-webkit-scrollbar{
        display: none;
        width: 0;
    }

    .search-bar{
        background-color: brown;
        margin: 0;
        height: 48px;
    }

    .search-bar input{
        vertical-align: top;
        padding: 0;
        border: 0;
        height: 100%;
        width: calc(100% - 48px);
        font-size: 150%;
    }

    .search-bar button{
        margin: 0;
        padding: 0;
        border: 0;
        height: 48px;
        width: 48px;
        background-color: red;
    }

    .search-bar button:hover{
        background-color: darkred;
    }

    .game{
        background-color: darkslateblue;
        padding: 10px 5%;
        font-size: 150%;
        height: min-content;
        width: 90%;
    }

    .achievement:hover{
        background-color: darkblue;
        cursor: pointer;
    }

    .achievement{
        background-color: blue;
        height: min-content;
        width: 85%;
        padding: 10px 5% 10px 10%;
    }

    .detailedachievement{
        background-color: green;
        float: right;
        height: 100px;
        min-width: 500px;
        width: calc(100vw - 500px);
    }
</style>