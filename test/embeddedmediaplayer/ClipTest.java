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
        System.out.println("setTitle ");
        Clip instance = new Clip("title",3,8);
        String previousValue=instance.getTitle();// getting the value before setting
        instance.setTitle("");
        String valueAfter=instance.getTitle();// getting the real value, after the modification.
        assertEquals(previousValue,valueAfter);
        
        //set string NULL
        System.out.println("setTitle Null ");
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
    }
    
    @Test
    public void testEqualsOnNonEqualClips() 
    {
    }
    
    @Test
    public void testSetEndToNegativeNumberKeepsPreviousValue() 
    {
    }
    
    @Test
    public void testSetStartToValidPositiveNumber() 
    {    
    }
    
    
    
}
