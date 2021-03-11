using System;
using System.Collections;
using System.Collections.Generic;
using System.Runtime.CompilerServices;
using System.Security.Cryptography;
using TMPro;
using UnityEngine;
using UnityEngine.Networking;
using UnityEngine.SceneManagement;

public class GetUserName : MonoBehaviour
{
    public TextMeshPro mText;
    public string user;


    void DoThing(string userName) {
        user = userName;
        mText.text = user;
    }
}
