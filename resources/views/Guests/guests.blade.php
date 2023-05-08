<h1>Opret nye gæster</h1>
<form action="guests" method='POST'>
    @csrf
    <input type="text" name="firstname" placeholder="Fornavn"> <br><br>
    <input type="text" name="lastname" placeholder="Efternavn"> <br><br>
    <input type="text" name="email" placeholder="Email"> <br><br>
    <input type="text" name="phonenumber" placeholder="Telefonnummer"> <br><br>
    <button >Tilføj gæst</button>
</form>