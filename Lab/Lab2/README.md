### Lab2: Buttons
![Screenshot 2022-04-28 204346](https://user-images.githubusercontent.com/81466207/165784311-dfa547ce-5bc8-43a2-8b7f-edd11dc2c009.jpg)
sample of a button in css
.btn{
    border: 7px;
    border: solid;
    padding: 10px 30px 10px 30px; //space between border and text
    border-color:#ee8363;
    background-color:#ee8363;
    color: white;
    margin: 20px ;
    font-size: 20px;
    border-radius: 10px;          //responsible for curved edge
    outline: 1rem solid #26be96;  //effects like flex
}
.btn:hover{                       //when mouse is placed over btn
    border:outset;                //shows shadows when hover
    border: 4px solid;            //highlights border on hover
}
.btn:active{                      //performs certain action on click
    background-color: #67d2b6;    //changes color on click
}
