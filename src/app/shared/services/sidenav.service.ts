import { Injectable } from '@angular/core';
import { MatSidenav } from '@angular/material';

@Injectable()
export class SidenavService {

    private sidenav: MatSidenav;
    public sidenavIcon: string;

    public setSidenav(sidenav: MatSidenav) {
        this.sidenav = sidenav;
    }

    public toggle(): void {
        this.sidenav.toggle();
        this.switchIcon();
    }

    public close() {
        this.sidenav.close();
        this.switchIcon();
    }

    public setIcon(iconName: string) {
        this.sidenavIcon = iconName;
    }

    private switchIcon() {
        if (this.sidenavIcon === 'menu') {
            this.sidenavIcon = 'close';
        } else if (this.sidenavIcon === 'close') {
            this.sidenavIcon = 'menu';
        }

        console.log('icon: ' + this.sidenavIcon);
    }
}
