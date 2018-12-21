package com.jbnu.synergyapp.presenter;

import com.jbnu.synergyapp.view.SplashView;

import net.grandcentrix.thirtyinch.TiPresenter;
import net.grandcentrix.thirtyinch.rx.RxTiPresenterSubscriptionHandler;
import net.grandcentrix.thirtyinch.rx.RxTiPresenterUtils;

import java.util.concurrent.TimeUnit;

import rx.Observable;
import rx.android.schedulers.AndroidSchedulers;
import rx.functions.Action1;
import rx.schedulers.Schedulers;

public class SplashPresenter extends TiPresenter<SplashView>{
    private static final long ANIMATION_DELAY = 3000;
    private static final long RUN_ACTIVITY_DELAY = 2000;
    private final RxTiPresenterSubscriptionHandler rxHelper = new RxTiPresenterSubscriptionHandler(this);

    @Override
    protected void onCreate(){
        super.onCreate();
        delaySplashAnimation(2000);
    }

    public void delayRunActivity() {
        rxHelper.manageSubscription(Observable.timer(RUN_ACTIVITY_DELAY, TimeUnit.MILLISECONDS)
                .compose(RxTiPresenterUtils.<Long>deliverLatestToView(this))
                .subscribeOn(Schedulers.newThread())
                .observeOn(AndroidSchedulers.mainThread())
                .subscribe(new Action1<Long>() {
                    @Override
                    public void call(Long aLong) {
                        intentToNextActivity();
                    }
                })
        );
    }
    private void intentToNextActivity() {
        getView().intentToMain();

    }
    private void delaySplashAnimation(long delay) {
        rxHelper.manageSubscription(Observable.timer(delay, TimeUnit.MILLISECONDS)
                .compose(RxTiPresenterUtils.<Long>deliverLatestToView(this))
                .subscribeOn(Schedulers.newThread())
                .observeOn(AndroidSchedulers.mainThread())
                .subscribe(new Action1<Long>() {
                    @Override
                    public void call(Long aLong) {
                        getView().startSplash();
                    }
                })
        );
    }
}
