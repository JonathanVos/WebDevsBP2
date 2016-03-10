<?php 
$content = '<div class="content">
      <h1>Winkelwagen</h1>
      <table>
        <tr>
          <th></th>
          <th>Product naam</th>
          <th>Prijs</th>
          <th>Aantal</th>
          <th>Subtotaal</th>
          <th>Verwijder</th>
        </tr>
        <tr>
          <td>
            <img src="img/verkeersborden/50zone_klein.jpg" alt="" />
          </td>
          <td>Verboden parkeren klein</td>
          <td>25</td>
          <td>
            <input type="number" name="quantity" min="1" max="1000" value="1" />
          </td>
          <td>25</td>
          <td><button>Delete</button></td>
        </tr>
        <tr>
          <td>
            <img src="img/verkeersborden/verboden_parkeren_klein.jpg" alt="" />
          </td>
          <td>Verboden parkeren klein</td>
          <td>25</td>
          <td>
            <input type="number" name="quantity" min="1" max="1000" value="1" />
          </td>
          <td>25</td>
          <td>
            <button>Delete</button>
          </td>
        </tr>
        <tr>
          <td colspan="3"></td>
          <td>
            <button>Herbereken bedrag</button>
          </td>
          <td>50</td>
          <td>
            <button>Afrekenen</button>
          </td>
        </tr>
      </table>
    </div>';
require 'template.php';
?>