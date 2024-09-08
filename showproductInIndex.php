<div class="form-containerProduct">
    <div class="image-container">
        <img src="images/cauli.png" alt="Cauliflower">
        <h2>Cauliflower</h2>
    </div>
    <div class="image-container">
        <img src="images/Turnip.png" alt="Turnip">
        <h2>Turnip</h2>
    </div>
    <div class="image-container">
        <img src="images/potato.png" alt="Potato">
        <h2>Potato</h2>
    </div>
    <div class="image-container">
        <img src="images/tomato.png" alt="Tomato">
        <h2>Tomato</h2>
    </div>
    <div class="image-container">
        <img src="images/pumpkin.png" alt="Pumpkin">
        <h2>Pumpkin</h2>
    </div>
    <div class="image-container">
        <img src="images/carrot.png" alt="Carrot">
        <h2>Carrot</h2>
    </div>
</div>

<style>
    /* For products in index.php */
    .form-containerProducts {
        max-width: 90%;
        margin: 50px auto;
        margin-top: 150px;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
        display: flex;
        justify-content: space-around;
        align-items: center;
        flex-wrap: wrap;
    }

    .form-containerProducts img {
        max-width: 18%;
        margin-bottom: 10px;
    }

    .form-containerProduct {
        max-width: 90%;
        margin: 50px auto;
        margin-top: 150px;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
        display: flex;
        justify-content: space-around;
        align-items: center;
        flex-wrap: wrap;
    }

    .form-containerProduct .image-container {
        max-width: 18%;
        margin-bottom: 20px;
        text-align: center;
    }

    .form-containerProduct img {
        width: 100%;
        border-radius: 8px;
        border: 2px solid rgba(0, 0, 0);

    }

    .form-containerProduct p {
        margin: 5px 0;
    }



    .line {
        margin-right: 100px;
        background-color: #223432;
        width: 2px;
        height: 500px;
        border: 2x solid #223432;
        backdrop-filter: blur(35px);
    }

    .line2 {
        width: 300px;
        height: 300px;
        margin-right: 100px;
        overflow: hidden;
        border-radius: 10px;
        /* box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); */
        box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px inset;
    }

    .line2 img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 10px;
    }

    /* For products in index.php */
</style>