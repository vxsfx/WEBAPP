
 using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class playerMovement : MonoBehaviour
{
    public CharacterController controller;
    public float speed = 6f;
    
    float turnSmoothVelocity;
    
    public float turnSmoothTime = 0.1f;
    public float gravity = -9.81f;
    
    Vector3 velocity;

    void Update()
    {
        //get axis
        float horizontal = Input.GetAxisRaw("Horizontal");
        float vertical = Input.GetAxisRaw("Vertical");
    
        
        //total 3d vector                           //0 y axis
        Vector3 direction = new Vector3(horizontal, 0f, vertical);
        

        //if direction size >= 0.1
        if (direction.magnitude >= 0.1f)
        {
                                      //inversed tangent equation
            float targetAngle = Mathf.Atan2(direction.x, direction.z) * Mathf.Rad2Deg;
         
            //dont understand bit
            float angle = Mathf.SmoothDampAngle(transform.eulerAngles.y, targetAngle, ref turnSmoothVelocity, turnSmoothTime);
     

            transform.rotation = Quaternion.Euler(0f, angle, 0f);
            controller.Move(direction * speed * Time.deltaTime);
        }

        //y direction(jump, fall)
        velocity.y += gravity * Time.deltaTime;
        controller.Move(velocity * Time.deltaTime);
    }



}