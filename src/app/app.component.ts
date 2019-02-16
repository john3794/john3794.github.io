import { Component, OnInit } from '@angular/core';
import { SidenavService } from './shared/services/sidenav.service';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css'],
  providers: [SidenavService]
})
export class AppComponent {

  constructor(private sidenavService: SidenavService) {
  }

  toggle(): void {
    this.sidenavService.toggle();
    console.log('toggle clicked');
  }

}
