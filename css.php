<style>
    html{
        height: 100%;
        width: 100%;
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
        height: 40px;
        width: 85%;
        font-size: 25px;
        padding: 0 5% 0 10%;
        white-space: nowrap;
    }

    .achievement .status{
        background-color: red;
        float: right;
        height: 40px;
        width: 40px;
    }

    .detailedachievement{
        background-color: green;
        float: right;
        height: calc((100vh - 77px) / 2);
        width: calc(100vw - 400px - 77px * 2);
    }

    .addachievement{
        background-color: red;
        float: right;
        height: calc((100vh - 77px) / 2);
        width: calc(100vw - 400px - 77px * 2);
    }

    .detailedachievement-title{
        margin: 10px;
        overflow: hidden;
        text-overflow: clip;
        text-align: center;
        font-size: 40px;
        white-space: nowrap;
        background-color: yellow;
        width: calc(100% - 20px);
        height: 60px;
    }

    .detailedachievement-description{
        margin: 10px;
        overflow: hidden;
        text-overflow: clip;
        background-color: magenta;
        width: calc(100% - 20px);
        height: calc(100% - 150px);
    }

    .detailedachievement-status{
        background-color: rosybrown;
        width: 100%;
        height: 60px;
    }

    .addachievement form{
        height: calc(100% - 35px);
    }

    .addachievement-name{
        margin: 5px;
        overflow: hidden;
        text-overflow: clip;
        text-align: center;
        font-size: 20px;
        white-space: nowrap;
        background-color: white;
        width: calc(100% - 10px);
        height: 25px;
    }

    .addachievement-title{
        padding: 0;
        margin: 5px;
        border: 0;
        text-align: center;
        font-size: 20px;
        background-color: yellow;
        width: calc(100% - 10px);
        height: 30px;
    }

    .addachievement-description{
        padding: 0;
        margin: 5px;
        border: 0;
        text-align: center;
        resize: none;
        font-size: 10px;
        background-color: magenta;
        width: calc(100% - 10px);
        height: calc(115.5px);
        min-height: 50px;
    }

    .addachievement-status{
        padding: 0;
        margin: 0;
        border: 0;
        background-color: rosybrown;
        width: 100%;
        height: 60px;
    }

    @media screen and (max-width: 1000px) {
        .outest-left-bar, .outest-right-bar{
            width: calc(100vw - 923px);
        }

        .detailedachievement, .addachievement{
            width: calc(100vw - 400px - max((100vw - 923px) * 2, 0px));
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