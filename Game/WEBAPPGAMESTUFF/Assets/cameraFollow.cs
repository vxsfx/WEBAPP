using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class cameraFollow : MonoBehaviour
{
    public Transform target;
    public Vector3 offset;

    private float currentZoom = 10f;
    
    public float pitch = 2f;
    
    void LateUpdate()
    {
                            //use parent object(player) position
        transform.position = target.position - offset * currentZoom;
        
        transform.LookAt(target.position + Vector3.up * pitch);
    }
}
