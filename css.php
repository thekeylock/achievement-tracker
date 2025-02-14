<style>
    html{
        height: 100%;
        width: 100%;
        min-width: 350px;
    }

    html::-webkit-scrollbar{
        display: none;
        width: 0;
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
        white-space: nowrap;
    }

    .title h1{
        text-align: center;
        margin: 0;
        padding: 0;
    }

    .outest-left-bar{
        background-color: chocolate;
        float: left;
        width: 77px;
        height: calc(100vh - 77px);
    }

    .outest-right-bar{
        background-color: brown;
        float: right;
        width: 77px;
        height: 100%;
        height: calc(100vh - 77px);
    }

    .outer-left-bar{
        height: calc(100vh - 77px);
        float: left;
        width: 400px;
    }

    .left-bar{
        overflow-y: scroll;
        overflow-x: none;
        height: 100%;
        min-width: min-content;
        max-width: 350px;
    }

    .left-left-bar{
        background-color: orange;
        width: 25px;
        height: 100%;
        float: left;
    }

    .right-left-bar{
        background-color: orangered;
        width: 25px;
        height: 100%;
        float: right;
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
        white-space: nowrap;
        height: max-content;
        width: 90%;
    }

    .achievement:hover{
        background-color: darkblue;
        cursor: pointer;
    }

    .achievement{
        background-color: blue;
        height: max-content;
        width: 85%;
        padding: 10px 5% 10px 10%;
        white-space: nowrap;
    }

    .detailedachievement{
        background-color: green;
        float: right;
        height: calc((100vh - 77px) / 2);
        min-width: 400px;
        width: calc(100vw - 400px - 77px * 2);
    }

    .addachievement{
        background-color: red;
        float: right;
        height: calc((100vh - 77px) / 2);
        min-width: 400px;
        width: calc(100vw - 400px - 77px * 2);
    }

    @media screen and (max-width: 1000px) {
        .outest-left-bar, .outest-right-bar{
            width: calc(100vw - 923px);
        }

        .detailedachievement, .addachievement{
            width: calc((100vw - 400px) + clamp(0, (100vw - 923px)) * 2);
            /*hier was ik */
        }
    }


    @media screen and (max-width: 800px) {

        .outer-left-bar{
            float: none;
            height: calc(50vh - 77px);
            width: 100%;
            margin: auto;
        }

        .left-left-bar{
            width: calc((100% - 350px)/2);
        }

        .right-left-bar{
            width: calc((100% - 350px)/2);
        }

        .detailedachievement{
            width: 100%;
        }

        .addachievement{
            width: 100%;
        }
    }
</style>