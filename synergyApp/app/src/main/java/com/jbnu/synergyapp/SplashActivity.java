package com.jbnu.synergyapp;

import android.content.Intent;
import android.graphics.drawable.AnimationDrawable;
import android.preference.PreferenceManager;
import android.support.annotation.NonNull;
import android.os.Bundle;
import android.widget.ImageView;

import com.jbnu.synergyapp.animation.Bang;
import com.jbnu.synergyapp.animation.BangListener;
import com.jbnu.synergyapp.presenter.SplashPresenter;
import com.jbnu.synergyapp.view.SplashView;

import net.grandcentrix.thirtyinch.TiActivity;

import butterknife.BindView;
import butterknife.ButterKnife;

public class SplashActivity extends TiActivity<SplashPresenter, SplashView> implements SplashView {

    private static final int BANG_RADIUS = 300;
    private SplashPresenter splashPresenter;
    private Bang bang;
    @BindView(R.id.logo_text) ImageView logoTextSwap;
    @BindView(R.id.logo_aparat_icon) ImageView logoIcon;

    @NonNull
    @Override
    public SplashPresenter providePresenter(){
        splashPresenter = new SplashPresenter();
        return splashPresenter;
    }

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_splash);

        ButterKnife.bind(this);
        bang = Bang.attach2Window(this);
    }

    @Override
    public void startSplash(){
        bang.bang(logoTextSwap, BANG_RADIUS, new BangListener() {
            @Override
            public void onAnimationStart() {
                ((AnimationDrawable) logoIcon.getBackground()).start();
                logoTextSwap.setImageResource(R.drawable.logo);
            }

            @Override
            public void onAnimationEnd() {
                splashPresenter.delayRunActivity();
            }
        });
    }

    @Override
    public void intentToMain(){
        Intent intent = new Intent(SplashActivity.this, MainActivity.class);
        intent.addFlags(Intent.FLAG_ACTIVITY_NEW_TASK | Intent.FLAG_ACTIVITY_CLEAR_TASK);
        startActivity(intent);
    }
}
