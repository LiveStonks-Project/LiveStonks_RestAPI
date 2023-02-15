<h1 align="center">LiveStonks  RestAPI</h1>

## HOW TO INSTALL & RUN
<br>

<p>1. <code>git clone https://github.com/LiveStonks-Project/LiveStonks_RestAPI.git</code></p>
<p>2. <code>composer install</code></p>
<p>3. Set .env file with your database details</p>
<p>4. Generate all tables: <code> php artisan migrate</code></p>
<p>5. Create dummy data for api<code> php artisan migrate:fresh --seed --seeder=LoremIpsum</code></p>
<p>6. Run API<code> php artisan serve</code></p>
<br><br>

## Requests available

<h3>METHOD [<b>GET</b>]</h3>
<br>
<p><code>http://domain.com/assets</code> ~ used to display all assets</p>
<p><code>http://domain.com/asset/{id}</code> ~ used to display one asset by id</p>
<p><code>http://domain.com/category_asset</code> ~ used to display all categories available</p>
<br>
<h3>METHOD [<b>POST</b>]</h3>
<br>
<p><code>http://domain.com/create-asset</code> ~ used to create/insert a new asset into table</p>
<p>To create a new asset you will need a json body with:
<ul>
<li>name ~ Tesla</li>
<li>tag ~ TSLA</li>
<li>category_asset_id ~ 2</li>
<li>price ~ 200.21</li>
<li>last_price ~ 192.12</li>
</ul>
</p>
<br>
<h3>METHOD [<b>DELETE</b>]</h3>
<br>
<p><code>http://domain.com/delete-asset/{id}</code> ~ used to delete asset by id</p>
<br>
<h3>METHOD [<b>PUT</b>]</h3>
<br>
<p><code>http://domain.com/update-asset/{id}</code> ~ used to update asset by id
<p>To create a new asset you will need a json body with:
<ul>
<li>name ~ Tesla</li>
<li>tag ~ TSLA</li>
<li>category_asset_id ~ 2</li>
</ul>
</p>
<p><code>http://domain.com/update-asset-status/{id}</code> ~ used to update asset by id</p>
<p>To create a new asset you will need a json body with:
<ul>
<li>price ~ 200.21</li>
<li>last_price ~ 192.12</li>
</ul>
<br>