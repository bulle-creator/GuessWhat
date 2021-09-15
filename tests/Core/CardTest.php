<?php

namespace App\Tests\Core;

use App\Core\CardGame32;
use PHPUnit\Framework\TestCase;
use App\Core\Card;

class CardTest extends TestCase
{

  public function testName()
  {
    $card = new Card('As', 'Trèfle');
    $this->assertEquals('As', $card->getName());
    $card = new Card('2', 'Trèfle');
    $this->assertEquals('2', $card->getName());

  }

  public function testColor()
  {
    $card = new Card('As', 'Trèfle');
    $this->assertEquals('Trèfle', $card->getColor());
    $card = new Card('As', 'Pique');
    $this->assertEquals('Pique', $card->getColor());
  }

  public function testCompareSameCard()
  {
    $card1 = new Card('As', 'Trèfle');
    $card2 = new Card('As', 'Trèfle');
    $this->assertEquals(0, CardGame32::compare($card1,$card2));
  }

  public function testCompareSameNameNoSameColor()
  {
    // TODO compare le même nom mais pas la même couleur 

    $card1 = new Card('As', 'Trèfle');
    $card2 = new Card('As', 'Pique');

    $this->assertEquals( $card1->getName(),$card2->getName());
    $this->assertNotEquals( $card1->getColor(),$card2->getColor());
    
  
  }

  public function testCompareNoSameCardNoSameColor()
  {
    // TODO compare une carte differente et une couleur differente

    $card1 = new Card('As', 'Trèfle');
    $card2 = new Card('2', 'Pique');

    $this->assertNotEquals( $card1->getName(),$card2->getName());
    $this->assertNotEquals( $card1->getColor(),$card2->getColor());
    
  }

  public function testCompareNoSameCardSameColor()
  {
    // TODO compare une carte different mais la même coleur 
    $card1 = new Card('As', 'Trèfle');
    $card2 = new Card('2', 'Trèfle');

    $this->assertEquals( $card1->getColor(),$card2->getColor());
    $this->assertNotEquals( $card1->getName(),$card2->getName());
    
  }
  
  public function testToString()
  {
    //TODO vérifie que la représentation textuelle d'une carte est correcte 
    $card = new Card('As', 'Trèfle');
    $this->assertEquals($card->__toString(),$card->__toString());

  }

  public function testComportementObject()
  {
    //TODO vérifie le comportement des objet

  }


}
