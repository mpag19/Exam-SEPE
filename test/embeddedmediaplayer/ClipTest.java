/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package embeddedmediaplayer;

import org.junit.After;
import org.junit.AfterClass;
import org.junit.Before;
import org.junit.BeforeClass;
import org.junit.Test;
import static org.junit.Assert.*;

/**
 *
 * @author comqsjb
 */
public class ClipTest {
    
    public ClipTest() {
    }
    
    @BeforeClass
    public static void setUpClass() {
    }
    
    @AfterClass
    public static void tearDownClass() {
    }
    
    @Before
    public void setUp() {
    }
    
    @After
    public void tearDown() {
    }

    /**
     * Test of getTitle method, of class Clip.
     */
    @Test
    public void testSetTitleToEmptyStringKeepsPreviousValue()
    {
         //set String ""
        
        Clip instance = new Clip("title",3,8);
        String previousValue=instance.getTitle();// getting the value before setting
        instance.setTitle("");
        String valueAfter=instance.getTitle();// getting the real value, after the modification.
        assertEquals(previousValue,valueAfter);
        
        //set string NULL
        
        Clip instance1 = new Clip("title",3,8);
        String previousValue1=instance1.getTitle();// getting the value before setting the Null value
        instance1.setTitle(null);
        String valueAfter1=instance1.getTitle();// getting the real value, after the modification.
        assertEquals(previousValue1,valueAfter1);
        
        //set title with String
        Clip instance2 = new Clip("title",3,8);
        String previousValue2=instance2.getTitle();// getting the value before setting the new value
        instance2.setTitle("New Title");
        String valueAfter2=instance2.getTitle();// getting the real value, after the modification.
        assertNotEquals(previousValue2,valueAfter2);       
        
    }

    @Test
    public void testSetEndBeforeStartKeepsPreviousValue()
    {
        
      // Setting End before Start
      Clip instance = new Clip("title",4,10);
      int endValueBeforeModify= instance.getEnd(); // getting the End value before set the new value
      instance.setEnd(2);
      int endValueAfterModify=instance.getEnd(); //getting the current value after being modified
      assertEquals(endValueBeforeModify,endValueAfterModify);  
      
      //Setting end with null
      Clip instance1 = new Clip("title",4,10);
      int endValueBeforeModify1= instance1.getEnd(); // getting the End value before set the new value
      instance1.setEnd(null);// setting end with null
      int endValueAfterModify1=instance1.getEnd(); //getting the current value after being modified
      assertEquals(endValueBeforeModify1,endValueAfterModify1); 
      
          
      //Setting end  equals start time
      Clip instance2 = new Clip("title",4,10);
      int endValueBeforeModify2= instance2.getEnd(); // getting the End value before set the new value
      instance2.setEnd(4);// setting end equals start
      int endValueAfterModify2=instance2.getEnd(); //getting the current value after being modified
      assertNotEquals(endValueBeforeModify2,endValueAfterModify2);
      assertEquals(4,endValueAfterModify2);
    }

    @Test
    public void testEqualsOnEqualClips() 
    {
        //Same Clips
        Clip instance= new Clip("title",1,10);
        Clip instanceAnotherClip = new Clip("title",1,10);// create other clip with same Data
        boolean resultEqual= instance.equals(instanceAnotherClip);
        assertTrue(resultEqual);
        
        // Different Clips
        Clip instanceAnotherClip1 = new Clip("title2",1,11);// create different  clip
        boolean resultDifferent= instance.equals(instanceAnotherClip1);
        assertFalse(resultDifferent);
        
        //null clip
         Clip instanceAnotherClip2=null;// null clip
         boolean resultNull=instance.equals(instanceAnotherClip2);
         assertFalse(resultNull);        
    }
    
    @Test
    public void testEqualsOnNonEqualClips() 
    {
        // Different Clips
        Clip instance= new Clip("title",1,10);
        Clip instanceAnotherClip1 = new Clip("title2",1,11);// create another instance with different values
        boolean resultDifferent= instance.equals(instanceAnotherClip1);
        assertFalse(resultDifferent);
    }
    
    @Test
    public void testSetEndToNegativeNumberKeepsPreviousValue() 
    {
      //Setting end with negative value
      Clip instance1 = new Clip("title",4,10);
      int endValueBeforeModify1= instance1.getEnd(); // getting the End value before set the new value
      instance1.setEnd(-10);   // setting end with negative value
      int endValueAfterModify1=instance1.getEnd(); //getting the current value after being modified, it should be the same at endValueBeforeModify1
      assertEquals(endValueBeforeModify1,endValueAfterModify1); 
    }
    
    @Test
    public void testSetStartToValidPositiveNumber() 
    {   
         //setting righ value possitive 
        Clip instance = new Clip("title",15,50);
        instance.setStart(20);
        int startValueAfterModify3=instance.getStart();// gettin value after modyfied the start attribut with null
        assertEquals(20,startValueAfterModify3); 
        
        // Setting null
        int startValueBeforeModify=instance.getStart();// gettin the value before any modification
        instance.setStart(null);
        int startValueAfterModify=instance.getStart();// gettin value after modyfied the start attribut with null
        assertEquals(startValueBeforeModify,startValueAfterModify);
        
        //setting < 0
        instance.setStart(-1);
        int startValueAfterModify1=instance.getStart();// gettin value after modyfied the start attribut with null
        assertEquals(startValueBeforeModify,startValueAfterModify1);
        
        //setting start greater than end
        instance.setStart(51);
        int startValueAfterModify2=instance.getStart();// gettin value after modyfied the start attribut with null
        assertEquals(startValueBeforeModify,startValueAfterModify2);
        
        
    }
    
    
    
}
