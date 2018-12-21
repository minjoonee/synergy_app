package com.jbnu.synergyapp.view;

import net.grandcentrix.thirtyinch.TiView;
import net.grandcentrix.thirtyinch.callonmainthread.CallOnMainThread;

public interface SplashView extends TiView{

    @CallOnMainThread
    void startSplash();

    @CallOnMainThread
    void intentToMain();
}
